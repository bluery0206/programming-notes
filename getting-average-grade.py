def get_average(data):
    return sum(data) / len(data)

all = [
    [1.4, 1.6, 1.9, 1.6, 2.9, 1.3, 1.2, 1.3],
    [1.3, 3.0, 1.5, 3.0, 2.0, 1.7, 1.1],
    [1.9, 2.0, 1.8, 1.5, 1.6, 1.5, 2.4, 1.9, 1.7],
    [1.7, 2.0, 2.2, 2.1, 1.9, 1.4, 1.8, 1.1],
    [1.7, 2.0, 1.3, 1.6, 1.9, 1.7],
    [1.1, 1.5, 1.3, 1.0, 1.2, 2.4, 1.3],
    [1.7, 1.1, 1.5, 1.2, 1.2, 1.1],
    [1.3, 2.0, 1.7, 1.4, 1.4, 1.4, 1.0],
]

# for idx, n in enumerate(range(0, len(all), 2)):
#     prev = n + 1
#     print(f"Year{idx+1}: {get_average(all[n]):.2f}, {get_average(all[prev]):.2f}")

avgs = [get_average(sem) for sem in all]
avgs.append(1.0)
for avg in avgs:
    print(f"{avg:.2f}", end=", ")

print()
gwa = get_average(avgs)
print(f"GWA: {gwa:.2f}")